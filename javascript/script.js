
const menuIcon = document.querySelector (".navigation_icon");
const navbar = document.querySelector(".navigation_bar");


menuIcon.AddEventListener("click", () => {
navbar.ClassList.toggle("change");
});


