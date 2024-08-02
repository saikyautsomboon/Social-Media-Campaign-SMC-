$(".nav_page a").on("click", function(){ 
    $(".nav_page").find(".active").removeClass("active"); 
    $(this).parent().addClass("active");
});


$("#email").click(function () { 
    $('#popalert').hide();
});

var videoclick = document.querySelectorAll(".aboutvideo .video_container .controls .video_btn").forEach( btn =>{
    btn.onclick = () =>{
        let src = btn.getAttribute('data-src');
        document.querySelector(".aboutvideo .video_container .videoshow").src = src;
    }

});


const readicon = document.querySelectorAll('.readmore_icon');

readicon.forEach( button =>{
    button.addEventListener('click',function () { 

        // Get the class name from the button
        const groupClass = this.classList[0];
        console.log(groupClass);

        // Select all div elements
        const allsection= document.querySelectorAll("#livecontainers section");
        console.log(allsection);
        let currentIndex = -1;

        // Remove the active class from all items
        allsection.forEach(section =>{
            section.classList.remove('active');
        });

        // Select all div elements of the same group
        const groupsection = document.querySelectorAll(`#livecontainers .${groupClass}`);
        
        // Find the index of the currently highlighted item in the group
        groupsection.forEach((section, index)=> {
            if(section.classList.contains('active')){
                currentIndex = index;
            }
        });

        // Calculate the next index
        const nextIndex = (currentIndex+1 ) % groupsection.length;

        groupsection[nextIndex].classList.add('active');
    });
});


