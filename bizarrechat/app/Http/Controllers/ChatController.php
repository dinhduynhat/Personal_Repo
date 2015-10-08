<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SocialUser;
use App\MobileUser;
use App\MailTemplate;
use App\ContactUs;
use App\Favorite;
use App\Likes;
use App\Block;
use App\TopUser;
use App\Payments;
use App\Coins;
use Input;
use Collection;
use Hash;
use DB;
use Auth;
use Session;
use Validator;
use Mail;
use Cookie;

#Above Classes were included in the Controller

class ChatController extends Controller {

    public function __construct(Request $request) {
        $this->request = $request;
        #Parent Class which enables request class
    }

    public function index() {
        return view('welcome');
    }

    public function RegisterUser() {

        $UserData = Input::all();
        $Length = 50;
        $Token = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $Length);
        $UserData['verify_token'] = $Token;
        $Password_Raw = $this->request->input('password');
        $UserData['password_raw'] = $Password_Raw;
        $UserData['gcm_id'] = '';


        if ($this->request->input('gcm_id')) {
            $Length = 6;
            $OTP = substr(str_shuffle("023456789ABCDEFGHJKLMNOPQRSTUVWXYZ"), 0, $Length);
            $UserData['otp'] = $OTP;
            $UserData['gcm_id'] = $this->request->input('gcm_id');
            MobileUser::create($UserData);

            $PushMessage = "{'Type' : 'OTP', 'Code' : '.$OTP.'}";
            $Message = array("price" => urldecode($PushMessage));
            $this->PushNotification($this->request->input('gcm_id'), $Message);
            return 1;
            exit;
        }

        if ($this->request->input('facebook_id')) {
            $validation = Validator::make($UserData, SocialUser::$RegisterRule);
        } else {
            $validation = Validator::make($UserData, User::$RegisterRule);
        }
        if ($validation->passes()) { #If the Validation passes 
            if ($this->request->input('facebook_id')) {

                $UserData['quickblox_id'] = '';
                SocialUser::create($UserData);
            } else {
                User::create($UserData);
            }


            #Creating the User
            $Email = $this->request->input('email');
            $UserName = $this->request->input('firstname');


            if ($this->request->input('facebook_id')) {

                Mail::send([], array('UserName' => $UserName, 'Email' => $Email, 'Token' => $Token), function($message) use ($UserName, $Email, $Token) {
                    #Getting content from the Mail Template and Triggering the Email to the User with Activation Code
                    $MailContent = MailTemplate::find(2);
                    $MailBody = $MailContent->content;
                    $MailBody = str_replace("{{username}}", $UserName, $MailBody);
                    $MailBody = str_replace("{{link}}", $Token, $MailBody);
                    $message->setBody($MailBody, 'text/html');
                    $message->to($Email);
                    $message->subject($MailContent->subject);
                });
                #Returning Success
                return 'success';
            } else {

                Mail::send([], array('UserName' => $UserName, 'Email' => $Email, 'Token' => $Token), function($message) use ($UserName, $Email, $Token) {
                    #Getting content from the Mail Template and Triggering the Email to the User with Activation Code
                    $MailContent = MailTemplate::find(1);
                    $MailBody = $MailContent->content;
                    $MailBody = str_replace("{{username}}", $UserName, $MailBody);
                    $MailBody = str_replace("{{link}}", $Token, $MailBody);
                    $message->setBody($MailBody, 'text/html');
                    $message->to($Email);
                    $message->subject($MailContent->subject);
                });
                #Returning Success
                return 'success';
            }
        } else {
            #If the Validation fails send the 
            return $validation->messages();
        }
    }

    public function Verify($token) {

        #Verifying the Confirmation Link 
        $UserEmail = User::where('verify_token', $token)->pluck('email');
        #If the verify_tokenexists then 
        if ($UserEmail) {
            session_start();
            $_SESSION['UserEmail'] = $UserEmail;
            return redirect('/#/verify');
        } else {
            return redirect('/#/invalidtoken');
        }
    }

    public function verifyOTP() {
        $GCMID = $this->request->input('gcm_id');
        $OTP = $this->request->input('otp');
        $User = User::where('gcm_id', $GCMID)->where('otp', $OTP)->pluck('id');
        if ($User) {
            $Response = array('success' => '1', 'userid' => $User);
            return json_encode($Response);
        } else {
            $Response = array('success' => '0');
            return json_encode($Response);
        }
    }

    public function VerifyFB($token) {

        #Verifying the Confirmation Link 
        $UserEmail = User::where('verify_token', $token)->pluck('email');


        #If the verify_tokenexists then 
        if ($UserEmail) {

            $RegisterUser = User::where('email', $UserEmail)->first();
            $RegisterUser->verify_token = 'expired';
            $RegisterUser->status = '1';
            $RegisterUser->save();


            session_start();
            $_SESSION['VerifiedEmail'] = $UserEmail;
            return redirect('/#/registration');
        } else {
            return redirect('/#/invalidtoken');
        }
    }

    public function VerifyUser() {
        #Verifying the Users who enters the password after the Confirmation Link
        $email = $this->request->input('email');
        $password = $this->request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) { #If the Credentials are Right
            #Setting External Session for AngularJS Identification
            session_start();
            $_SESSION['VerifiedEmail'] = $email;
            $RegisterUser = User::where('email', $email)->first();
            $RegisterUser->verify_token = 'expired';
            $RegisterUser->status = '1';
            $RegisterUser->save();
            #Activate the user by changing the Status flag to 1 and expiring the verify_token value
            return redirect('/#/registration');
        } else {
            #If the Credentials are wrong then return the error
            return redirect('/#/invalidtoken');
        }
    }

    public function getUserAddress() {
        if (Auth::user()) {
            return Auth::user()->living_addr;
        }
    }

    public function GetProfile() {

        $userId = $this->request->input('userId');
        if ($userId != '') {
            $userProfile = User::where('id', $userId)->first();
            $Response = array('success' => '1', 'profile' => $userProfile);
            return json_encode($Response);
        } else {
            $Response = array('success' => '0', 'message' => 'Invalid User');
            return json_encode($Response);
        }




        if (Auth::user()) {
        #if (1==1) 
            $UData = User::where('id', Auth::user()->id)->first();
            if ($UData) {
                echo $UData;
            } else {
                echo $UData;
            }
        } else {
            return 'session_expired';
        }
    }

    public function getFriendProfile() {

        $profileId = $this->request->input('profileId');
        $UData = User::where('id', $profileId)->first();
        if ($UData) {
            $Response = array('success' => '1', 'profile' => $UData);
            return json_encode($Response);
        } else {
            echo 'not found';
        }
    }

    public function addToFavorites() {
        $userId = $this->request->input('userid');
        $friendId = $this->request->input('friendid');
        $UData = User::where('id', $friendId)->first();
        if ($UData) {
            $Favorite = Favorite::where('favorite_person', $friendId)->where('favorite_by', $userId)->first();
            if ($Favorite) {
                Favorite::where('favorite_person', $friendId)->where('favorite_by', $userId)->delete();
            } else {
                $UserData['favorite_person'] = $friendId;
                $UserData['favorite_by'] = $userId;
                Favorite::create($UserData);
            }
            $Response = array('success' => '1');
            return json_encode($Response);
        } else {
            echo 'not found';
        }
    }

    public function addToLikes() {
        $userId = $this->request->input('userid');
        $friendId = $this->request->input('friendid');
        $UData = User::where('id', $friendId)->first();
        if ($UData) {
            $Favorite = Likes::where('like_person', $friendId)->where('like_by', $userId)->first();
            if ($Favorite) {
                Likes::where('like_person', $friendId)->where('like_by', $userId)->delete();
            } else {
                $UserData['like_person'] = $friendId;
                $UserData['like_by'] = $userId;
                Likes::create($UserData);
            }
            $Response = array('success' => '1');
            return json_encode($Response);
        } else {
            echo 'not found';
        }
    }

    public function addToBlock() {
        $userId = $this->request->input('userid');
        $friendId = $this->request->input('friendid');
        $UData = User::where('id', $friendId)->first();
        if ($UData) {
            $Favorite = Block::where('block_person', $friendId)->where('block_by', $userId)->first();
            if ($Favorite) {
                Block::where('block_person', $friendId)->where('block_by', $userId)->delete();
            } else {
                $UserData['block_person'] = $friendId;
                $UserData['block_by'] = $userId;
                Block::create($UserData);
            }
            $Response = array('success' => '1');
            return json_encode($Response);
        } else {
            echo 'not found';
        }
    }

    public function getFavoriteList() {
        $userId = $this->request->input('userId');
        $UData = User::where('id', $userId)->first();
        if ($UData) {
            $MembersList = Favorite::where('favorite_person', '=', $userId)->get();
            
            if ($MembersList) {
                $Result = '<ul>';
                foreach ($MembersList as $Members) {
                    $Result .= "<li class='friends_li'><a href='#/showprofile/" . $Members->favorite_by . "'><img src='public/images/photo.jpg' width='178' height='164'></a></li>";
                }
                $Result .= '</ul>';
                $Response = array('success' => '1', 'list' => $Result);
            } else {
                $Response = array('success' => '2');
            }
        } else {
            $Response = array('success' => '0');
        }
        return json_encode($Response);
    }

    public function getLikesList() {
        $userId = $this->request->input('userId');
        $UData = User::where('id', $userId)->first();
        if ($UData) {
            $MembersList = Likes::where('like_person', '=', $userId)->get();
            if ($MembersList) {
                $Result = '<ul>';
                foreach ($MembersList as $Members) {
                    $Result .= "<li class='friends_li'><a href='#/showprofile/" . $Members->like_person . "'><img src='public/images/photo.jpg' width='178' height='164'></a></li>";
                }
                $Result .= '</ul>';
                $Response = array('success' => '1', 'list' => $Result);
            } else {
                $Response = array('success' => '2');
            }
        } else {
            $Response = array('success' => '0');
        }
        return json_encode($Response);
    }

    public function checkLikes() {
        $userId = $this->request->input('userid');
        $friendId = $this->request->input('friendid');

        $UData = User::where('id', $friendId)->first();
        if ($UData) {
            $Favorite = Likes::where('like_person', $friendId)->where('like_by', $userId)->first();
            if ($Favorite) {
                $Response = array('success' => '1');
            } else {
                $Response = array('success' => '0');
            }
            return json_encode($Response);
        } else {
            echo 'not found';
        }
    }

    public function checkBlock() {
        $userId = $this->request->input('userid');
        $friendId = $this->request->input('friendid');

        $UData = User::where('id', $friendId)->first();
        if ($UData) {
            $Favorite = Block::where('block_person', $friendId)->where('block_by', $userId)->first();
            if ($Favorite) {
                $Response = array('success' => '1');
            } else {
                $Response = array('success' => '0');
            }
            return json_encode($Response);
        } else {
            echo 'not found';
        }
    }

    public function checkFavorite() {
        $userId = $this->request->input('userid');
        $friendId = $this->request->input('friendid');

        $UData = User::where('id', $friendId)->first();
        if ($UData) {
            $Favorite = Favorite::where('favorite_person', $friendId)->where('favorite_by', $userId)->first();
            if ($Favorite) {
                $Response = array('success' => '1');
            } else {
                $Response = array('success' => '0');
            }
            return json_encode($Response);
        } else {
            echo 'not found';
        }
    }

    public function getTopUsers() {
        $userId = $this->request->input('userId');
        $UData = User::where('id', '1')->first();
        if ($UData) {
            $MembersList = TopUser::where('period_from', '>', '1947-10-01 01:01:01')->where('period_to', '<', '2019-10-01 01:01:01')->get();
            if ($MembersList) {
                $Result = '<ul>';
                foreach ($MembersList as $Members) {
                    $Result .= "<li class='put_me_here_photo_li'><a href='#/showprofile/" . $Members->user_id . "'><img src='public/images/photo.jpg' width='178' height='164'></a></li>";
                }
                $Result .= '</ul>';
                $Response = array('success' => '1', 'list' => $Result);
            } else {
                $Response = array('success' => '2');
            }
        } else {
            $Response = array('success' => '0');
        }
        return json_encode($Response);
    }

    public function updateSearchResult() {

        if (Auth::user()) {
            $UserData = Input::all();
            $interest = $this->request->input('interestSearch');
            $seeking = $this->request->input('relationshipSearch');
            $address = $this->request->input('addressLocation');
            $from = $this->request->input('fromSearch');
            $to = $this->request->input('toSearch');
            #return $from;
            /*
              $MembersList = User::where('interest', '=', $interest)
              ->where('seeking','=',$seeking)
              ->where('living_addr','LIKE',"%".$address."%")
              ->select('id','firstname','city')
              ->get(); */

            $MembersList = User::select('id', 'firstname', 'city');
            if (!empty($address)) {
                $MembersList->where('living_addr', 'LIKE', "%" . $address . "%");
            }
            if (!empty($interest)) {
                $MembersList->where('interest', '=', $interest);
            }
            if (!empty($seeking)) {
                $MembersList->where('seeking', '=', $seeking);
            }
            if (!empty($from)) {
                $MembersList->where('dob', '>', $from);
            }
            if (!empty($to)) {
                $MembersList->where('dob', '<', $to);
            }
            $MembersList->where('id', '!=', Auth::user()->id);
            $MembersList = $MembersList->get();



            $Response = '
                
<style>
tr, td {
    display: inline-block;
}    </style> 
                <script>
        $(document).ready(function() {
    $("#example").DataTable();
} );
</script>
<table id="example" class="display" cellspacing="0" width="100%">
    <thead style="display:none">
        <tr style="display:none">
                <th>Name</th>
                <th>Position</th>
            </tr>
        </thead>
        <tfoot style="display:none">
            <tr>
                <th>Name</th>
                <th>Position</th>
            </tr>
        </tfoot>
 ';
            foreach ($MembersList as $Member) {
                $Response .= '
           <tr>
                 <td style="display:none">
                 ' . $Member['firstname'] . '
                 </td>
                 <td>
                 <div class="people_bg" style="  width: 180px;
  height: 250px;">
       	  <div class="people_img">
                <a href="#/showprofile/' . $Member['id'] . '">
                <img src="public/images/loader.gif" class="member_photo_loader" style="display: none;">
                <img src="public/images/defalt_men.jpg" id="member_default_men" style="display: inline;"> 
                <img src="public/images/defalt_women.jpg" id="member_default_women" style="display: inline;">
                <img src="public/images/photo.jpg" id="member_uploaded_photo" style="display: inline;"> 
                <div class="people_photo_icon">
                	<span><img style="margin:3px 0 0 0" src="public/images/photo_icon.png" width="19" height="15"></span><span id="member_photo_counting">1/4</span>
                </div></a>
            </div>
            <div id="member_now">
            	<div id="member_online"><img src="public/images/online.png" width="10" height="10"></div>
                
                <div id="member_name"><a href="#">' . $Member['firstname'] . '</a></div>
            </div>
            <div id="member_city">
            	<div id="member_city_img"><img src="public/images/people.png" width="22" height="22"></div>
                <div id="member_city_name"><a href="#">' . $Member['city'] . '</a></div>
            </div>
      </div>
        </td>
            </tr>';
            }
            $Response .='</tbody></table>';
            echo $Response;
        } else {
            return 'noauthenticate';
        }


        //  return $MembersList;
    }

    public function GetLocation() {

        $userId = $this->request->input('userId');
        $Location = User::where('id', $userId)->pluck('living_addr');
        if ($Location) {
            $Response = array('success' => '1', 'location' => $Location);
            return json_encode($Response);
        } else {
            $Response = array('success' => '0');
            return json_encode($Response);
        }
    }

    public function GetMembers() {


        $userId = $this->request->input('userId');
        $UserExist = User::where('id', $userId)->pluck('id');
        if ($UserExist) {
            $City = User::where('id', $userId)->pluck('living_addr');
            $Country = User::where('id', $userId)->pluck('living');
            if ($City == '') {
                $Response = array('success' => '0', 'message' => 'Please update your Address');
            } else {

                $CityList = User::where('living_addr', 'LIKE', "%$City%")->where('id', '!=', $userId)->select('id', 'firstname', 'living_addr')->get();
                $CountryList = User::where('living', 'LIKE', "%$Country%")->where('id', '!=', $userId)->select('id', 'firstname', 'living')->get();
                $Response = array('success' => '1', 'city_list' => $CityList, 'country_list' => $CountryList);
            }
         #   return json_encode($Response);
        }


        if ($userId) {
            #return 'loggedin';
            $CurrentAddress = User::where('id', $userId)->pluck('living_addr');
            $MembersList = User::where('living_addr', 'LIKE', "%$CurrentAddress%")->where('id', '!=', $userId)->select('id', 'firstname', 'city')->get();



            $Response = '
                
<style>
tr, td {
    display: inline-block;
}    </style> 
                <script>
        $(document).ready(function() {
    $("#example").DataTable();
} );
</script>
<table id="example" class="display" cellspacing="0" width="100%">
    <thead style="display:none">
        <tr style="display:none">
                <th>Name</th>
                <th>Position</th>
            </tr>
        </thead>
        <tfoot style="display:none">
            <tr>
                <th>Name</th>
                <th>Position</th>
            </tr>
        </tfoot>
 ';
            foreach ($MembersList as $Member) {
                $Response .= '
           <tr>
                 <td style="display:none">
                 ' . $Member['firstname'] . '
                 </td>
                 <td>
                 <div class="people_bg" style="  width: 180px;
  height: 250px;">
       	  <div class="people_img">
                <a href="#/showprofile/' . $Member['id'] . '">
                <img src="public/images/loader.gif" class="member_photo_loader" style="display: none;">
                <img src="public/images/defalt_men.jpg" id="member_default_men" style="display: inline;"> 
                <img src="public/images/defalt_women.jpg" id="member_default_women" style="display: inline;">
                <img src="public/images/photo.jpg" id="member_uploaded_photo" style="display: inline;"> 
                <div class="people_photo_icon">
                	<span><img style="margin:3px 0 0 0" src="public/images/photo_icon.png" width="19" height="15"></span><span id="member_photo_counting">1/4</span>
                </div></a>
            </div>
            <div id="member_now">
            	<div id="member_online"><img src="public/images/online.png" width="10" height="10"></div>
                
                <div id="member_name"><a href="#">' . $Member['firstname'] . '</a></div>
            </div>
            <div id="member_city">
            	<div id="member_city_img"><img src="public/images/people.png" width="22" height="22"></div>
                <div id="member_city_name"><a href="#">' . $Member['city'] . '</a></div>
            </div>
      </div>
        </td>
            </tr>';
            }
            $Response .='</tbody></table>';
            echo $Response;
        } else {
            return 'noauthenticate';
        }
    }

######### PROFILE ###########

    /* Function to Update Profile Name of User */

    public function updateProfileName() {
        $userId = $this->request->input('userId');
        $UserExist = User::where('id', $userId)->pluck('id');
        if ($UserExist) {
            $UserData['firstname'] = $this->request->input('userProfileName');
            $affectedRows = User::where('id', '=', $userId)->update($UserData);
            $Response = array('success' => 1);
        } else {
            $Response = array('success' => 0);
        }
        return json_encode($Response);        
    }

    /* Function to Update About Me of User */

    public function updateAboutMe() {
        $UserData['aboutme'] = $this->request->input('userAboutMe');
        if (Auth::user()) {
            $affectedRows = User::where('id', '=', Auth::user()->id)->update($UserData);
            $UserData = Input::all();
            return 'update_success';
        } else {
            return 'session_expired';
        }
    }

    /* Function to Update LOcation of the User from Google Map */

    public function updateLocation() {
        $UserData['living_addr'] = $this->request->input('address');
        $UserData['lat'] = $this->request->input('lat');
        $UserData['lon'] = $this->request->input('lon');
        
        $userId = $this->request->input('userId');
        $UserExist = User::where('id', $userId)->pluck('id');
        
        if ($UserExist) {
            $affectedRows = User::where('id', '=', Auth::user()->id)->update($UserData);
            $UserData = Input::all();
            return 'update_success';
        } else {
            return 'session_expired';
        }
    }

    /* Function to Update Relationship of User */

    public function updateRelationship() {
        $UserData['relationship'] = $this->request->input('userRelationship');
        if (Auth::user()) {
            $affectedRows = User::where('id', '=', Auth::user()->id)->update($UserData);
            $UserData = Input::all();
            return 'update_success';
        } else {
            return 'session_expired';
        }
    }

    /* Function to Update Sexuality of User */

    public function updateSexuality() {
        $UserData['sexuality'] = $this->request->input('userSexuality');
        if (Auth::user()) {
            $affectedRows = User::where('id', '=', Auth::user()->id)->update($UserData);
            $UserData = Input::all();
            return 'update_success';
        } else {
            return 'session_expired';
        }
    }

    /* Function to Update Height of User */

    public function updateHeight() {
        $UserData['height'] = $this->request->input('userHeight');
        if (Auth::user()) {
            $affectedRows = User::where('id', '=', Auth::user()->id)->update($UserData);
            $UserData = Input::all();
            return 'update_success';
        } else {
            return 'session_expired';
        }
    }

    /* Function to Update Wegiht of User */

    public function updateWeight() {
        $UserData['weight'] = $this->request->input('userWeight');
        if (Auth::user()) {
            $affectedRows = User::where('id', '=', Auth::user()->id)->update($UserData);
            $UserData = Input::all();
            return 'update_success';
        } else {
            return 'session_expired';
        }
    }

    /* Function to Update Weight of User */

    public function updateBody() {
        $UserData['bodytype'] = $this->request->input('userBody');
        if (Auth::user()) {
            $affectedRows = User::where('id', '=', Auth::user()->id)->update($UserData);
            $UserData = Input::all();
            return 'update_success';
        } else {
            return 'session_expired';
        }
    }

    /* Function to Update Children of User */

    public function updateChildren() {
        $UserData['children'] = $this->request->input('userChildren');
        if (Auth::user()) {
            $affectedRows = User::where('id', '=', Auth::user()->id)->update($UserData);
            $UserData = Input::all();
            return 'update_success';
        } else {
            return 'session_expired';
        }
    }

    /* Function to Update Smoking of User */

    public function updateSmoking() {
        $UserData['smoking'] = $this->request->input('userSmoking');
        if (Auth::user()) {
            $affectedRows = User::where('id', '=', Auth::user()->id)->update($UserData);
            $UserData = Input::all();
            return 'update_success';
        } else {
            return 'session_expired';
        }
    }

    /* Function to Update Drinking of User */

    public function updateDrinking() {
        $UserData['drinking'] = $this->request->input('userDrinking');
        if (Auth::user()) {
            $affectedRows = User::where('id', '=', Auth::user()->id)->update($UserData);
            $UserData = Input::all();
            return 'update_success';
        } else {
            return 'session_expired';
        }
    }

    /* Function to Update Smoking of User */

    public function updateEducation() {
        $UserData['education'] = $this->request->input('userEducation');
        if (Auth::user()) {
            $affectedRows = User::where('id', '=', Auth::user()->id)->update($UserData);
            $UserData = Input::all();
            return 'update_success';
        } else {
            return 'session_expired';
        }
    }

    /* Function to Update Job of User */

    public function updateJob() {

        $UserData['job'] = $this->request->input('userJob');
        if (Auth::user()) {
            $affectedRows = User::where('id', '=', Auth::user()->id)->update($UserData);
            $UserData = Input::all();
            return 'update_success';
        } else {
            return 'session_expired';
        }
    }

    /* Function to Update Company  of User */

    public function updateCompany() {

        $UserData['company'] = $this->request->input('userCompany');
        if (Auth::user()) {
            $affectedRows = User::where('id', '=', Auth::user()->id)->update($UserData);
            $UserData = Input::all();
            return 'update_success';
        } else {
            return 'session_expired';
        }
    }

    /* Function to Update Income  of User */

    public function updateIncome() {

        $UserData['income'] = $this->request->input('userIncome');
        if (Auth::user()) {
            $affectedRows = User::where('id', '=', Auth::user()->id)->update($UserData);
            $UserData = Input::all();
            return 'update_success';
        } else {
            return 'session_expired';
        }
    }

    /* Function to Update Eyecolor  of User */

    public function updateEyecolor() {

        $UserData['eyecolour'] = $this->request->input('userEyecolor');
        if (Auth::user()) {
            $affectedRows = User::where('id', '=', Auth::user()->id)->update($UserData);
            $UserData = Input::all();
            return 'update_success';
        } else {
            return 'session_expired';
        }
    }

    /* Function to Update Haircolor  of User */

    public function updateHaircolor() {

        $UserData['haircolour'] = $this->request->input('userHaircolor');
        if (Auth::user()) {
            $affectedRows = User::where('id', '=', Auth::user()->id)->update($UserData);
            return 'update_success';
        } else {
            return 'session_expired';
        }
    }

    /* Function to Update Living  of User */

    public function updateLiving() {

        $UserData['living'] = $this->request->input('userLiving');
        $UserData['living_addr'] = $this->request->input('userLivingAddr');
        if (Auth::user()) {
            $affectedRows = User::where('id', '=', Auth::user()->id)->update($UserData);
            return 'update_success';
        } else {
            return 'session_expired';
        }
    }

######### PROFILE ###########     
######### Contact Us ###########     

    public function updateContactUs() {
        $userId = $this->request->input('userId');
        $UserExist = User::where('id', $userId)->pluck('id');
        if ($UserExist) {
            $UserData = Input::all();
            $UserData['complaint_by'] = Auth::user()->id;
            Contactus::create($UserData);
            return 'success';
        } else {
            return 'session_expired';
        }
    }

######### Subscribe ###########     

    public function doSubscribe() {
        $userId = $this->request->input('userId');
        $UserExist = User::where('id', $userId)->pluck('id');
        if ($UserExist) {
            $Token = substr(str_shuffle("0123456789ABCDEFGHJKMNOPQRSTUVWXYZ"), 0, 20);
            $PaymentDetails['user_id'] = $this->request->input('userId');
            $PaymentDetails['payment_category'] = $this->request->input('payment_category');
            $PaymentDetails['payment_card_type'] = $this->request->input('payment_card_type');
            $PaymentDetails['payment_package'] = $this->request->input('payment_package');
            $PaymentDetails['unique_id'] = $Token;
            Payments::create($PaymentDetails);
            $Response = array('success' => 1);
        } else {
            $Response = array('success' => 0, 'message' => 'Error in Payment');
        }
        return json_encode($Response);
    }

######### Get Coins ###########     

    public function getCoins() {
        $userId = $this->request->input('userId');
        $UserExist = User::where('id', $userId)->pluck('id');
        if ($UserExist) {
            $Token = substr(str_shuffle("0123456789ABCDEFGHJKMNOPQRSTUVWXYZ"), 0, 20);
            $PaymentDetails['user_id'] = $this->request->input('userId');
            $PaymentDetails['payment_category'] = $this->request->input('payment_category');
            $PaymentDetails['payment_card_type'] = $this->request->input('payment_card_type');
            $PaymentDetails['payment_package'] = $this->request->input('payment_package');
            $PaymentDetails['unique_id'] = $Token;
            Coins::create($PaymentDetails);
            $Response = array('success' => 1);
        } else {
            $Response = array('success' => 0, 'message' => 'Error in Payment');
        }
        return json_encode($Response);
    }

    
######### Contact Us ###########     

    public function CheckSession() {
        #Function that Checks whether the User is Logged in or Not
        if (Auth::user()) {
            session_start();
            $_SESSION['AuthUser'] = Auth::user()->id;
            $_SESSION['AuthUserName'] = Auth::user()->firstname;

            return 1;
        } else {
            return 2;
        }
    }

    public function ResetPassword() {
        #Forget Password Function
        $email = $this->request->input('email');
        $UData = User::where('email', $email)->first();
        #Checking whether the email is exists, 
        if ($UData) {
            #If Exists then create a 5 digit random number password 
            $Length = 5;
            $Token = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $Length);
            $UserData['password_raw'] = $Token;
            $UserData['password'] = Hash::make($Token);
            $affectedRows = User::where('email', '=', $email)->update($UserData);
            $UserName = $UData->firstname;
            $Token = $UserData['password_raw'];
            $Email = $email;
            $Password = $UserData['password_raw'];
            Mail::send([], array('UserName' => $UserName, 'Email' => $Email, 'Token' => $Token), function($message) use ($UserName, $Email, $Token) {
                #Getting the Reset Password Mail Template and Triggering the email to User with New Password
                $MailContent = MailTemplate::find(2);
                $MailBody = $MailContent->content;
                $MailBody = str_replace("{{username}}", $UserName, $MailBody);
                $MailBody = str_replace("{{token}}", $Token, $MailBody);
                $message->setBody($MailBody, 'text/html');
                $message->to($Email);
                $message->subject($MailContent->subject);
                #Returning successs after the mail triggering is done
                return 'success';
            });
        } else {
            #If the mail didn't exist then return false
            return 'error';
        }
    }

    public function CompleteRegistration() {
        #Completing the Secondary Registration after successfully passing from the Confirmation Link
        $UserData = Input::all();
        $User = $UserData['useremail'];
        unset($UserData['useremail']);
        if ($affectedRows = User::where('email', '=', $User)->update($UserData)) {
            #Getting the Last Affected Row
            $User = User::where('email', $User)->pluck('id');


            if (Auth::loginUsingId($User)) {  #Manually Authenticating the User 
                session_start();
                $_SESSION['AuthUserName'] = Auth::user()->firstname;
                #Returning success after authenticating the User
                return 'success';
            } else {
                #In case of Fail
                return 'error';
            }
        } else {
            #In case the Registration Updation was not done
            return 'error';
        }
    }

    public function AuthUser() {
        #Getting the Email and Password Inputs

        $email = $this->request->input('email');
        $password = $this->request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {

            $Activated = Auth::user()->status;
            if ($Activated == 1) {  #If the User's Status is set 1 i.e., Activated or Not
                #Returning Success if the account is valid and it is activated
                #Setting Manual Sessions Temporarrily 
                Cookie::queue('tulytalk_cookie', Auth::user()->id, '216000');
                session_start();
                $_SESSION['AuthUserName'] = Auth::user()->firstname;
                $Response = array('success' => '1', 'userid' => Auth::user()->id);
                return json_encode($Response);
                return 'success';
            } else {
                #Returning notactive if the user exists and it is not activated
                $Response = array('success' => '0', 'message' => 'The user account is not Actived');
                return json_encode($Response);
                return 'notactive';
            }
        } else {
            #Returning error if the account does not exist
            $Response = array('success' => '0', 'message' => 'Invalid Username of Password');
            return json_encode($Response);
            return 'error';
        }
    }

    public function CheckFBStatus() {
        $facebook_id = $this->request->input('fbid');
        #$UserId = User::where('email', $email)->pluck('id');
        $UData = User::where('facebook_id', $facebook_id)->first();
        if ($UData != '') {
            $UserId = $UData->id;
            if (Auth::loginUsingId($UserId)) {  #Manually Authenticating the User 
                Cookie::queue('tulytalk_cookie', Auth::user()->id, '216000');
                Cookie::queue('bizarrechat_id', $UData->id, '216000');
                $Response = array('success' => '1', 'userid' => $UData->id);
                return json_encode($Response);
            }
        } else {
            $Response = array('success' => '0');
            return json_encode($Response);
        }
    }

    public function updateOwnSession() {
        
        $userId = $this->request->input('userId');
        $UserExist = User::where('id', $userId)->pluck('id');
        if ($UserExist) {
            return $UserExist;
        } else {
            return 'session_expired';
        }
    }

    public function Logout() {
        #Breaking the Existing Session
        #$value = Cookie::get('name');
        #return Cookie::get('tulytalk_cookie');
        Auth::logout();
        #Returning Success after breaking the session

        return 'success';
    }

    public function resendOTP() {
        $GCMID = $this->request->input('gcm_id');
        $OTP = User::where('gcm_id', $GCMID)->pluck('otp');


        if ($OTP) {
            $PushMessage = "{'Type' : 'OTP', 'Code' : '.$OTP.'}";
            $Message = array("message" => urldecode($PushMessage));
            $this->PushNotification($GCMID, $Message);
            $Response = array('success' => '1');
            return json_encode($Response);
        } else {
            $Response = array('success' => '0');
            return json_encode($Response);
        }
    }

    public function PushNotification($DeviceId, $Message) {

        $DeviceId = array($DeviceId);


        $url = 'https://android.googleapis.com/gcm/send';
        $fields = array(
            'registration_ids' => $DeviceId,
            'data' => $Message
        );
        $headers = array(
            'Authorization: key = AIzaSyB0iPVblsbMGyjmh6233m2hbjRIcvdR7w8',
            'Content-Type: application/json'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);

        $result = json_decode($result, true);
        $canonical_ids_count = $result['canonical_ids'];
        if ($canonical_ids_count) {
            $NewGCMIdList = end($result['results']);
            $NewGCMId = $NewGCMIdList['registration_id'];
            $UserId = User::where('gcm_id', $DeviceId)->pluck('id');
            if ($UserId) {
                $UserUpdate = DriverModel::where('id', $UserId)->first();
                $UserUpdate->gcm_id = $NewGCMId;
                $UserUpdate->gcm_id_updated_at = date('Y-m-d H:i:s');
                $UserUpdate->save();
            }
        }

        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        curl_close($ch);
    }

}
