
function valid_abo() {
	if($('[name="abo[digital]"]').length>0) {
		if(!$('[name="abo[digital]"]').prop("checked")) {
			if(confirm("En plus de votre abonnement papier, voulez-vous profiter de Society en digital sur iOs et Android pour 1€ de plus ?")){
				$('[name="abo[digital]"]').prop("checked", true);
			}
		}
	}
	$("#form_abo").submit();
}

// test