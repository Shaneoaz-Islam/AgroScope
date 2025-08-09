let container = document.getElementById('container')

toggle = () => {
	container.classList.toggle('sign-in')
	container.classList.toggle('sign-up')
}

setTimeout(() => {
	container.classList.add('sign-in')
}, 200)

    // SIGN UP FUNCTION
    function signUp() {
        let username = document.getElementById("signup-username").value;
        let email = document.getElementById("signup-email").value;
        let password = document.getElementById("signup-password").value;
        let confirmPassword = document.getElementById("signup-confirm").value;

        if (username === "" || email === "" || password === "" || confirmPassword === "") {
            alert("Please fill all fields");
            return;
        }

        if (password !== confirmPassword) {
            alert("Passwords do not match!");
            return;
        }

        // Save to local storage
        let user = {
            username: username,
            email: email,
            password: password
        };

        localStorage.setItem("user", JSON.stringify(user));
        alert("Sign up successful! Please sign in.");
        
        // Switch to sign-in form
        toggle();
    }

    // SIGN IN FUNCTION
    function auth(event) {
        event.preventDefault(); // prevent form from reloading

        let email = document.getElementById("email").value;
        let password = document.getElementById("password").value;

        let storedUser = JSON.parse(localStorage.getItem("user"));

        if (storedUser && storedUser.email === email && storedUser.password === password) {
            alert("Login successful!");
            window.location.assign("2nd-home.html");
        } else {
            alert("Invalid email or password!");
        }
    }
