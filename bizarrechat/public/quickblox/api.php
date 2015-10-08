

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$.ajax({
  type: "GET",
  url: "fetch",
  data: '1',
  cache: false,
  success: function(data)
  {
     console.log(data);
  }
});
</script>

<?php

echo 'a';
?>