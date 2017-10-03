var members = new Array();
var baseMember = {
	student_id: "",
	first_name: "",
	last_name: "",
	picture: "",
	phone: "",
	email: "",
	about: "",
	study: "",
	contact_to_school: 1
}
function submitForm(){
	var form_ok = true;
	jQuery("#newMemberFrm input, #newMemberFrm textarea").each(function(){
		if(jQuery(this).hasClass("required")){
			if(jQuery(this).val().length <= 3){
				jQuery(this).css('background-color', '#ffbbbb');
				form_ok = false;
			} else {
				jQuery(this).css('background-color', '#ffffff');
			}
		}
	});
	if(form_ok){
		var member = jQuery.extend(true, {}, baseMember)
		jQuery("#newMemberFrm input[type=text], #newMemberFrm textarea").each(function(){
			member[jQuery(this).attr('name')] = jQuery(this).val();
			jQuery(this).val("");
		});
		if (!jQuery("#contact_to_school").is(":checked")) {
			member["contact_to_school"] = 0;
		}
		members.push(member);
		addMemberToList(member);
	}
}
function submitTeam(){
	jQuery.ajax({
        url: '/helloworld',
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(members),
        dataType: 'json'
    });
}
jQuery("#teamBtn").click(function(){
	submitTeam();
});
function addMemberToList(member){
	jQuery("#teammembers").append('<div class="teammember" id="member-1"><header><h3>'+member.first_name + ' ' + member.last_name +'</h3</header></div>');
}