<?
 include ("inc_gen.php");
 $course_id = $_REQUEST[courseid]

 $sql = "select * from participant where course_id='$course_id' and member_id='$g_UserData[id]'";
 if (mysql_num_rows(mysql_query($sql) == 0)
 {
     $sql = "insert into participant set course_id='$course_id', member_id='$g_UserData[id]'";
     mysql_query($sql);
     header("Location: courses_participating.php");


 }
 else
 {
         print "
         <script language='javascript'>
         alert('You already participated in this course');
         history.back();
         </script>
         ";
 }


 ?>

