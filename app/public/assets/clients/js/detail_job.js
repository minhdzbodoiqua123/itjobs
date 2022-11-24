const btnApplyClick=document.querySelectorAll(".btnApplyClick");
const WEB_ROOT="http://localhost//itjobs";
btnApplyClick.forEach(item => {
    item.addEventListener("click",function() {
        const id=this.getAttribute("data-id")
        window.location.href=`${WEB_ROOT}/jobseekers/jobs/apply/${id}`;

    })
})