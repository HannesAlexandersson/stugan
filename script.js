function submitForm() {
    var formData = new FormData(document.getElementById("myForm"));

    fetch("submit.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        // Update the content on your page with the response
        document.getElementById("form-container").innerHTML = data;
    });
}