$(document).ready(function() {

	$("#news_form").submit(function() {
		$.ajax({
			type: "POST",
			url: "news.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			$("#news_form").trigger("reset");
		});
		return false;
	});
});