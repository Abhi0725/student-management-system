<br><br><br><br>
<em>&copy; Abhi 2015</em>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
function deleteRecord(id){
   var url="<?php echo base_url();?>";
   var r=confirm("Do you want to delete this?");
    if (r==true)
      window.location = url+"index.php/students/delete/"+id;
    else
      return false;
    } 
</script>
</body>
</html>