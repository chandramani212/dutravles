$("#return").attr("disabled", true);
$(".fta").hide();

$(".radioBtn2").click(function() {
    $("#return").attr("disabled", false);
     $(".re").show();
    $(".de").show();
     $(".fr0").show();
    $(".to0").show();
   $(".C1").hide();
        $(".C2").hide();
         $(".C3").hide();
          $(".C4").hide();
          $(".fta").hide();
    if ($("input[name=ynRadio]:checked").val() == "twoway") {
        $("#return").attr("disabled", true);
    }
}); 
$(".radioBtn1").click(function() {
     $("#return").val(" ");
      $(".fr0").show();
    $(".to0").show();
   $(".C1").hide();
        $(".C2").hide();
         $(".C3").hide();
          $(".C4").hide();
          $(".fta").hide();
    $("#return").attr("disabled", true);
    if ($("input[name=ynRadio]:checked").val() == "twoway") {
        $("#return").attr("disabled", false);
        
    }
}); 
$(".radioBtn3").click(function() {
     $("#return").val(" ");
      $("#deprature").val(" ");
    $(".re").hide();
    $(".de").hide();
    $(".fr0").hide();
    $(".to0").hide();
    $(".C1").show();
    $(".fta").show();
    
}); 

$("#time_slot").hide();
$(".radioHotel1").click(function() {
    $("#time_slot").hide();
    $("#check_out").show();
});
$(".radioHotel2").click(function() {
    $("#time_slot").show();
    $("#check_out").hide();
});

//.dropdown hover start----
$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});	
//dropdown hover end----



//select city start--
$(".C1").hide();
        $(".C2").hide();
         $(".C3").hide();
          $(".C4").hide();
$("#select_city").change(function(){
   if($(this).val()=="C1")
   {    
       $(".C1").show();
        $(".C2").hide();
         $(".C3").hide();
          $(".C4").hide();
   }
    else if($(this).val()=="C2")
   {    
       $(".C1").show();
        $(".C2").show();
         $(".C3").hide();
          $(".C4").hide();
   }
    else if($(this).val()=="C3")
   {    
       $(".C1").show();
        $(".C2").show();
         $(".C3").show();
          $(".C4").hide();
   }
    else if($(this).val()=="C4")
   {    
       $(".C1").show();
        $(".C2").show();
         $(".C3").show();
          $(".C4").show();
   }
});

// select city end----

//select room start--
$(".R1").show();
        $(".R2").hide();
         $(".R3").hide();
          $(".R4").hide();
$("#select").change(function(){
   if($(this).val()=="1")
   {    
       $(".R1").show();
        $(".R2").hide();
         $(".R3").hide();
          $(".R4").hide();
   }
    else if($(this).val()=="2")
   {    
       $(".R1").show();
        $(".R2").show();
         $(".R3").hide();
          $(".R4").hide();
   }
    else if($(this).val()=="3")
   {    
       $(".R1").show();
        $(".R2").show();
         $(".R3").show();
          $(".R4").hide();
   }
    else if($(this).val()=="4")
   {    
       $(".R1").show();
        $(".R2").show();
         $(".R3").show();
          $(".R4").show();
   }
});

// select room end----
