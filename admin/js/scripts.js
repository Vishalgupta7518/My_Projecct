// project.php
function confirmDeletion(){
    $(document).ready(function(){
        $('.trash-btn').click(function(){
            return confirm('Do you want to delete this item');
        })
    });
}

// add_progress.php Validation
function progressVal(){
    $(document).ready(function(){
        $('#btn').click(function(){
            
         if($('#pname').val()==""){
            alert("Please Enter Project Name");
            $('#pname').focus();
            return false;
         }
        
         if($('#pname').val().length<3){
            alert("Project Name mast be of minnimum 3 char!");
            $('#pname').val('');
            $('#pname').focus();
            return false;
         }

         if($.isNumeric($('#pname').val())){
            alert("Project Name mast be alphanumeric!");
            $('#pname').val('');
            $('#pname').focus();
            return false;
         }

        //  Project Percenteg(%)
        if($('#pp').val()==""){
            alert("Please Enter Project Percenteg(%)");
            $('#pp').focus();
            return false;
         }

         if($('#pp').val().match("[A-Z]")){
            alert("Please Enter valid Project Percenteg(%)");
            $('#pp').val('');
            $('#pp').focus();
            return false;
         }

         if($('#pp').val().match("[a-z]")){
            alert("Invalid Project Percenteg(%)");
            $('#pp').val('');
            $('#pp').focus();
            return false;
         }

         if(!($('#pp').val().match("[0-9]"))){
            alert("Please Enter Project Percenteg(%)");
            $('#pp').val('');
            $('#pp').focus();
            return false;
         }

        //  if(!($('#pp').val().match("[%]"))){
        //     alert("Please Enter Project Percenteg(%)");
        //     $('#pp').focus();
        //     return false;
        //  }
        
        //  Percenteg color class

        if($('#pcc').val()==""){
            alert("Please Enter Percenteg color class");
            $('#pcc').focus();
            return false;
         }
        
         if($('#pcc').val().length<3){
            alert("Skill icon name mast be of minnimum 3 char!");
            $('#pcc').val('');
            $('#pcc').focus();
            return false;
         }

         if($.isNumeric($('#pcc').val())){
            alert("Percenteg color class Name mast be alphnumeric!");
            $('#pcc').val('');
            $('#pcc').focus();
            return false;
         }

        })
    });
}

// add_project.php validation
function projectVal(){
    $(document).ready(function(){
        $('#btn').click(function(){
            
         if($('#pname').val()==""){
            alert("Please Enter Project Name");
            $('#pname').focus();
            return false;
         }
        
         if($('#pname').val().length<3){
            alert("Project Name mast be of minnimum 3 char!");
            $('#pname').val('');
            $('#pname').focus();
            return false;
         }

         if($.isNumeric($('#pname').val())){
            alert("Project Name mast be alphnumeric!");
            $('#pname').val('');
            $('#pname').focus();
            return false;
         }

        //  Description
        if($('#des').val()==""){
            alert("Please Enter Description somethink word");
            $('#des').focus();
            return false;
         }
        
         if($('#des').val().length<10){
            alert("Description mast be of minnimum 10 char!");
            $('#des').val('');
            $('#des').focus();
            return false;
         }

         if($.isNumeric($('#des').val())){
            alert("Description mast be alphnumeric!");
            $('#des').val('');
            $('#des').focus();
            return false;
         }
        //  Project image Thumbnail

        if($('#pit').val()==""){
            alert("Please Select Project image Thumbnail");
            $('#pit').focus();
            return false;
         }

        })
    });
}

// add_skill.php validation
function skillVal(){
    $(document).ready(function(){
        $('#btn').click(function(){

         if($('#sname').val()==""){
            // alert("Please Enter Skill Name");
            $('#span_name').html('**Please Enter Skill Name');
            $('#sname').focus();
            return false;
         }
        
         if($('#sname').val().length<3){
            // alert("Skill Name mast be of minnimum 3 char!");
            $('#span_name').html('**Skill Name mast be of minnimum 3 char!');
            $('#sname').val('');
            $('#sname').focus();
            return false;
         }

         if($.isNumeric($('#sname').val())){
            // alert("Skill Name mast be alphnumeric!");
            $('#span_name').html('**Skill Name mast be alphnumeric!');
            $('#sname').val('');
            $('#sname').focus();
            return false;
         }

        //  Description
        if($('#des').val()==""){
            // alert("Please Enter Description somethink word");
            $('#span_des').html('**Please Enter Description somethink word');
            $('#des').focus();
            return false;
         }
        
         if($('#des').val().length<10){
            // alert("Description mast be of minnimum 10 char!");
            $('#span_des').html('**Description mast be of minnimum 10 char!');
            $('#des').val('');
            $('#des').focus();
            return false;
         }

         if($.isNumeric($('#des').val())){
            // alert("Description mast be alphnumeric!");
            $('#span_des').html('**Description mast be alphnumeric!');
            $('#des').val('');
            $('#des').focus();
            return false;
         }
        //  skill icon

        if($('#iname').val()==""){
            // alert("Please Enter Skill icon Name");
            $('#span_iname').html('**Please Enter Skill icon Name');
            $('#iname').focus();
            return false;
         }
        
         if($('#iname').val().length<3){
            // alert("Skill icon name mast be of minnimum 3 char!");
            $('#span_iname').html('**Skill icon name mast be of minnimum 3 char!');
            $('#iname').val('');
            $('#iname').focus();
            return false;
         }

         if($.isNumeric($('#iname').val())){
            // alert("Skill icon Name mast be alphnumeric!");
            $('#span_iname').html('**Skill icon Name mast be alphnumeric!');
            $('#iname').val('');
            $('#iname').focus();
            return false;
         }

        })
    });
}

// add_team.php validation
function teamval(){
    $(document).ready(function(){
        $('#btn').click(function(){

         if($('#name').val()==""){
            alert("Please Enter Name");
            $('#name').focus();
            return false;
         }
        
         if($('#name').val().length<3){
            alert("Name mast be of minnimum 3 char!");
            $('#name').val('');
            $('#name').focus();
            return false;
         }

         if($.isNumeric($('#name').val())){
            alert("Name mast be alphnumeric!");
            $('#name').val('');
            $('#name').focus();
            return false;
         }

        //  Description
        if($('#des').val()==""){
            alert("Please Enter Description somethink word");
            $('#des').focus();
            return false;
         }
        
         if($('#des').val().length<10){
            alert("Description mast be of minnimum 10 char!");
            $('#des').val('');
            $('#des').focus();
            return false;
         }

         if($.isNumeric($('#des').val())){
            alert("Description mast be alphnumeric!");
            $('#des').val('');
            $('#des').focus();
            return false;
         }

        //  facebook
        if($('#facebook').val()==""){
            alert("Please Enter Facebook URL");
            $('#facebook').focus();
            return false;
        }

        if($('#facebook').val().length<5){
            alert("facebook url mast be of minnimum 5 char!")
            $('#facebook').val('');
            $('#facebook').focus();
            return false;
        }

        if($.isNumeric($('#facebook').val())){
            alert("facebook url mast be alphnumeric!");
            $('#facebook').val('');
            $('#facebook').focus();
            return false;
         }

          //  twitter
        if($('#twitter').val()==""){
            alert("Please Enter twitter URL");
            $('#twitter').focus();
            return false;
        }

        if($('#twitter').val().length<5){
            alert("twitter url mast be of minnimum 5 char!")
            $('#twitter').val('');
            $('#twitter').focus();
            return false;
        }

        if($.isNumeric($('#twitter').val())){
            alert("twitter url mast be alphnumeric!");
            $('#twitter').val('');
            $('#twitter').focus();
            return false;
         }

           //  youtube

        if($('#ytube').val()==""){
            alert("Please Enter youtube URL");
            $('#ytube').focus();
            return false;
        }

        if($('#ytube').val().length<5){
            alert("youtube url mast be of minnimum 5 char!")
            $('#ytube').val('');
            $('#ytube').focus();
            return false;
        }

        if($.isNumeric($('#ytube').val())){
            alert("youtube url mast be alphnumeric!");
            $('#ytube').val('');
            $('#ytube').focus();
            return false;
         }

          //  Team image Thumbnail

        if($('#tit').val()==""){
            alert("Please Select Team image Thumbnail");
            $('#tit').focus();
            return false;
         }


        })
    });
}

// edit_skill.php
function editskillVal(){
   $(document).ready(function(){
      $('#btn').click(function(){
         
              if($('#sname').val()==""){
                alert("Please Enter Skill Name");
                $('#sname').focus();
                return false;
             }
            
             if($('#sname').val().length<3){
                alert("Skill Name mast be of minnimum 3 char!");
                $('#sname').val('');
                $('#sname').focus();
                return false;
             }

             if($.isNumeric($('#sname').val())){
                alert("Skill Name mast be alphnumeric!");
                $('#sname').val('');
                $('#sname').focus();
                return false;
             }

            //  Description
            
            if($('#des').val()==""){
                alert("Please Enter Description somethink word");
                $('#des').focus();
                return false;
             }
            
             if($('#des').val().length<10){
                alert("Description mast be of minnimum 10 char!");
                $('#des').val('');
                $('#des').focus();
                return false;
             }

             if($.isNumeric($('#des').val())){
                alert("Description mast be alphnumeric!");
                $('#des').val('');
                $('#des').focus();
                return false;
             }

            //  skill icon

            if($('#sicon').val()==""){
                alert("Please Enter Skill icon Name");
                $('#sicon').focus();
                return false;
             }
            
             if($('#sicon').val().length<3){
                alert("Skill icon name mast be of minnimum 3 char!");
                $('#sicon').val('');
                $('#sicon').focus();
                return false;
             }

             if($.isNumeric($('#sicon').val())){
                alert("Skill icon Name mast be alphnumeric!");
                $('#sicon').val('');
                $('#sicon').focus();
                return false;
             }

      })
   })
}

// edit_team.php
function editteamVal(){
   $(document).ready(function(){
      $('#btn').click(function(){
         
             if($('#name').val()==""){
                alert("Please Enter Name");
                $('#name').focus();
                return false;
             }
            
             if($('#name').val().length<3){
                alert("Name mast be of minnimum 3 char!");
                $('#name').val('');
                $('#name').focus();
                return false;
             }

             if($.isNumeric($('#name').val())){
                alert("Name mast be alphnumeric!");
                $('#name').val('');
                $('#name').focus();
                return false;
             }

             //  Description
            if($('#des').val()==""){
                alert("Please Enter Description somethink word");
                $('#des').focus();
                return false;
             }
            
             if($('#des').val().length<10){
                alert("Description mast be of minnimum 10 char!");
                $('#des').val('');
                $('#des').focus();
                return false;
             }

             if($.isNumeric($('#des').val())){
                alert("Description mast be alphnumeric!");
                $('#des').val('');
                $('#des').focus();
                return false;
             }
            //  Project image Thumbnail

            // if($('#pit').val()==""){
            //     alert("Please Select Project image Thumbnail");
            //     $('#pit').focus();
            //     return false;
            //  }

              // Upload team image 
            
             if($('#uti').val()==""){
                alert("Please Select Upload Team image");
                $('#uti').val('');
                $('#uti').focus();
                return false;
             }
             //  facebook
            if($('#facebook').val()==""){
                alert("Please Enter Facebook URL");
                $('#facebook').focus();
                return false;
            }

            if($('#facebook').val().length<5){
                alert("facebook url mast be of minnimum 5 char!")
                $('#facebook').val('');
                $('#facebook').focus();
                return false;
            }

            if($.isNumeric($('#facebook').val())){
                alert("facebook url mast be alphnumeric!");
                $('#facebook').val('');
                $('#facebook').focus();
                return false;
             }

               //  twitter
            if($('#twitter').val()==""){
                alert("Please Enter twitter URL");
                $('#twitter').focus();
                return false;
            }

            if($('#twitter').val().length<5){
                alert("twitter url mast be of minnimum 5 char!")
                $('#twitter').val('');
                $('#twitter').focus();
                return false;
            }

            if($.isNumeric($('#twitter').val())){
                alert("twitter url mast be alphnumeric!");
                $('#twitter').val('');
                $('#twitter').focus();
                return false;
             }

                //  youtube

            if($('#ytube').val()==""){
                alert("Please Enter youtube URL");
                $('#ytube').focus();
                return false;
            }

            if($('#ytube').val().length<5){
                alert("youtube url mast be of minnimum 5 char!")
                $('#ytube').val('');
                $('#ytube').focus();
                return false;
            }

            if($.isNumeric($('#ytube').val())){
                alert("youtube url mast be alphnumeric!");
                $('#ytube').val('');
                $('#ytube').focus();
                return false;
             }

      })
   })
}

// edit_project.php
function editprojectVal(){
   $(document).ready(function(){
      $('#btn').click(function(){
         
              if($('#pname').val()==""){
                alert("Please Enter Project Name");
                $('#pname').focus();
                return false;
             }
            
             if($('#pname').val().length<3){
                alert("Project Name mast be of minnimum 3 char!");
                $('#pname').val('');
                $('#pname').focus();
                return false;
             }

             if($.isNumeric($('#pname').val())){
                alert("Project Name mast be alphnumeric!");
                $('#pname').val('');
                $('#pname').focus();
                return false;
             }

            //  Description
            if($('#des').val()==""){
                alert("Please Enter Description somethink word");
                $('#des').focus();
                return false;
             }
            
             if($('#des').val().length<10){
                alert("Description mast be of minnimum 10 char!");
                $('#des').val('');
                $('#des').focus();
                return false;
             }

             if($.isNumeric($('#des').val())){
                alert("Description mast be alphnumeric!");
                $('#des').val('');
                $('#des').focus();
                return false;
             }
            //  Project image Thumbnail

            // if($('#pit').val()==""){
            //     alert("Please Select Project image Thumbnail");
            //     $('#pit').focus();
            //     return false;
            //  }

            // Upload project image 
            
             if($('#upi').val()==""){
                alert("Please Select Upload project image");
                $('#upi').val('');
                $('#upi').focus();
                return false;
             }
      })
   })

}

// edit_progress.php
function editprogressVal(){
   $(document).ready(function(){
      $('#btn').click(function(){
         
         
             if($('#pname').val()==""){
                alert("Please Enter Project Name");
                $('#pname').focus();
                return false;
             }
            
             if($('#pname').val().length<3){
                alert("Project Name mast be of minnimum 3 char!");
                $('#pname').val('');
                $('#pname').focus();
                return false;
             }

             if($.isNumeric($('#pname').val())){
                alert("Project Name mast be alphnumeric!");
                $('#pname').val('');
                $('#pname').focus();
                return false;
             }

            //  Project Percenteg(%)
            if($('#pp').val()==""){
                alert("Please Enter Project Percenteg(%)");
                $('#pp').focus();
                return false;
             }

             if($('#pp').val().match("[A-Z]")){
                alert("Please Enter Project Percenteg(%)");
                $('#pp').val('');
                $('#pp').focus();
                return false;
             }

             if($('#pp').val().match("[a-z]")){
                alert("Please Enter Project Percenteg(%)");
                $('#pp').val('');
                $('#pp').focus();
                return false;
             }
            
             if(!$('#pp').val().match("[0-9]")){
                alert("Please Enter Project Percenteg(%)");
                $('#pp').val('');
                $('#pp').focus();
                return false;
             }

            //  if(!($('#pp').val().match("[%]"))){
            //     alert("Please Enter Project Percenteg(%)");
            //     $('#pp').val('');
            //     $('#pp').focus();
            //     return false;
            //  }
             
           //  Percenteg color class

            if($('#pcc').val()==""){
                alert("Please Enter Percenteg color class");
                $('#pcc').focus();
                return false;
             }
            
             if($('#pcc').val().length<3){
                alert("Skill icon name mast be of minnimum 3 char!");
                $('#pcc').val('');
                $('#pcc').focus();
                return false;
             }

             if($.isNumeric($('#pcc').val())){
                alert("Percenteg color class Name mast be alphnumeric!");
                $('#pcc').val('');
                $('#pcc').focus();
                return false;
             }

      })
   })
}

