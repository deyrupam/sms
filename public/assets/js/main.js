$(document).ready(function(){

    $('.sectionName').css('display','none');
    $('#section_stu').mouseenter(function(){
        section();
    });
});

function section(){
$('.sectionName').css('display','none');
var classID=$('#class_stu').val();
$('.id'+classID).css('display','block');
console.log(classID);

}

