document.addEventListener("DOMContentLoaded", function() {
    // Get references to form and button
    var form = document.getElementById("register_user");
    var submitBtn = document.getElementById("register");
    // var responseMessage = document.getElementById("responseMessage");
    // alert("hello");return 0;

    // Add click event listener to the submit button
    submitBtn.addEventListener("click", function() {
       
        var formData = new FormData(form); // Gather form data

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "forms/register.php", true); // Replace with your processing script
        xhr.onreadystatechange = function() {
            alert("hkkhskfh");
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Update response message div with server's response
                    alert(xhr.responseText);
                    // responseMessage.innerHTML = xhr.responseText;
                } else {
                    alert(xhr.responseText);
                    // responseMessage.innerHTML = "An error occurred.";
                }
            }
        };

        xhr.send(formData); // Send the form data asynchronously
    });
});
