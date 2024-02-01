let cat = document.querySelectorAll(".dark_over");
console.log(cat); // Log the elements
cat.forEach((item) => {
    item.addEventListener("click", (event) => {
        event.preventDefault();
        var cat_name = item.nextElementSibling.innerHTML;
        console.log(cat_name);
        fetch("php/filter_cat.php", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `cat_name=${cat_name}`,
        })
        .then((res) => {
            console.log(res);
            window.location.href = "http://localhost/NAVIGI-FINAL/catWorkers.php";
        })
    })
})

