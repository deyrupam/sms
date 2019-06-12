$(document).ready(function(){

$('.sectionName').css('display','none');


$('#section_stu').click(function(){
section();
});
});

function section(){

var className=$('#class_stu').val();
$('.id'+className).css('display','block');
}

