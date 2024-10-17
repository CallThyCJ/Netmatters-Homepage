document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    const xhr = new XMLHttpRequest();

    xhr.open("POST", 'send-email.php', true);
    xhr.setRequestHeader("Accept", "application/json");

    xhr.onload = function () {
        if (xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);

            if (response.status === "success") {
                
                console.log(response.message);
            
                // try to display more specific validation error
            } else if (response.status === "error"){
                if (response.errors) {

                    console.log("Errors:\n" + response.errors.join("\n"));
                    
                } else {
                    console.log(response.message);
                }
            }

        } else {
            console.log("Error:" + xhr.status);
        }
    };

    xhr.send(formData);
});