$("input[type=submit]").click(function(e){
    $("table input").removeClass("required");
    var error_list = "";
    <?php
    for ($i = 1; $i <= 10; $i++) {
    echo '
    if ($("#employee_name'.$i.'").length){
        if ($.trim($("#employee_name'.$i.'").val()) === ""){
            error_list = 
            error_list+"\nEmployee #'.$i.': Name is a mandatory field!";
            $("#employee_name'.$i.'").addClass("required");
        }
        if ($.trim($("#designation'.$i.'").val()) === ""){
            error_list = 
            error_list+"\nEmployee #'.$i.': Designation is a mandatory field!";
            $("#designation'.$i.'").addClass("required");
        }
    }'; 
    }
    ?>
    if(error_list!=""){
        alert("Following fields are mandatory!"+error_list);
        return false;
    }
});