

const user_info= document.querySelector(".user_cointainer");
const toggleBtn= document.querySelector(".drop_btn");
const toggleIcon  = document.querySelector(".drop_btn i");
const dropdown = document.querySelector(".dropdown_infomation");


const mob_user_info =  document.querySelector(".mobile_user_container");
const mob_toggleBtn = document.querySelector(".mobile_drop_btn");
const mob_toggleIcon = document.querySelector(".mobile_drop_btn i");
const mobdown = document.querySelector(".mobile_dropdown_infomation");

toggleBtn.onclick = function () {
    dropdown.classList.toggle('open')
    const isOpen =dropdown.classList.contains('open')

    toggleIcon.classList = isOpen ? 'fa-solid fa-caret-up': 'fa-solid fa-caret-down'
};

user_info.onclick = function () { 
    dropdown.classList.toggle('open')
    const isOpen =dropdown.classList.contains('open')

    toggleIcon.classList = isOpen ? 'fa-solid fa-caret-up': 'fa-solid fa-caret-down'
};

mob_toggleBtn.onclick = function () { 
    mobdown.classList.toggle('open')
    const isOpen =mobdown.classList.contains('open')

    mob_toggleIcon.classList = isOpen ? 'fa-solid fa-caret-up': 'fa-solid fa-caret-down'
};

mob_user_info.onclick = function () { 
    mobdown.classList.toggle('open')
    const isOpen =mobdown.classList.contains('open')

    mob_toggleIcon.classList = isOpen ? 'fa-solid fa-caret-up': 'fa-solid fa-caret-down'
};
