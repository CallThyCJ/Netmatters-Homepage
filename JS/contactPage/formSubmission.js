// Tick box
const tickbox = document.querySelector(".tickBox");
const privacyText = document.querySelector("#privacyText");

function toggleTickBox() {
    tickbox.classList.toggle("ticked");
}

tickbox.addEventListener("click", toggleTickBox);

privacyText.addEventListener("click", toggleTickBox);



// Form Submission
document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    const xhr = new XMLHttpRequest();

    xhr.open("POST", 'send-email.php', true);
    xhr.setRequestHeader("Accept", "application/json");

    xhr.onload = function () {
        if (xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            const formInputs = document.getElementsByClassName("contactInput");
            formInputsArray = Array.from(formInputs);

            formInputsArray.forEach(input => {

                    input.classList.remove("error");

            })

            if (response.status === "success") {
                const successMessage = document.getElementById("submitSuccess");

                successMessage.classList.add("success");
                console.log(successMessage.classList);
                
                console.log(response.message);
            
                // try to display more specific validation error
            } else if (response.status === "error"){
                if (response.errors) {

                    response.errors.forEach(error => {
                        
                        formInputsArray.forEach(input => {
                            if (input.name === error.field) {
                                input.classList.add("error");
                            }
                        });
                    })
    
                    console.log("Errors:\n" + response.errors.map(e => e.message).join("\n"));
                    
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