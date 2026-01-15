// function editInstructorModal(number) {
//     if (number === 1) {
//         document.querySelector('.modalInst').style.display = 'flex';
//     } else if (number === 2) {
//         document.querySelector('.modalCourse').style.display = 'flex';
//     }
// }

// function closeModal() {
//     document.querySelector('.modalInst').style.display = 'none';
//     document.querySelector('.modalCourse').style.display = 'none';
// }


function openEditModal(button, number) {

    if (number === 1) {

        var id = button.getAttribute("data-instid");
        var name = button.getAttribute("data-name");
        var job = button.getAttribute("data-job");
        var desc = button.getAttribute("data-desc");

        document.getElementById("whichModal_inst").value = 1;
        document.getElementById("inst_modal_id").value = id;
        document.getElementById("inst_modal_name").value = name;
        document.getElementById("inst_modal_job").value = job;
        document.getElementById("inst_modal_desc").value = desc;
        
        document.querySelector(".modalInst").style.display = "flex";
        
    } else if (number === 2) {
        
        var id = button.getAttribute("data-memid");
        var tier = button.getAttribute("data-tier");
        var description = button.getAttribute("data-description");
        var price = button.getAttribute("data-price");
        
        document.getElementById("whichModal_price").value = 2;
        document.getElementById("mem_modal_id").value = id;
        document.getElementById("mem_modal_tier").value = tier;
        document.getElementById("mem_modal_description").value = description;
        document.getElementById("mem_modal_price").value = price;
        
        document.querySelector(".modalPrice").style.display = "flex";
        
    } else if (number === 3) {
        
        var id = button.getAttribute("data-classid");
        var name = button.getAttribute("data-className");
        var description = button.getAttribute("data-classDescription");
        
        document.getElementById("whichModal_class").value = 3;
        document.getElementById("class_modal_id").value = id;
        document.getElementById("class_modal_className").value = name;
        document.getElementById("class_modal_classDescription").value = description;

        document.querySelector(".modalClass").style.display = "flex";
        
    }
}

function closeModal(number) {
    if (number === 1) {
        document.querySelector(".modalInst").style.display = "none";
    } else if (number === 2) {
        document.querySelector(".modalPrice").style.display = "none";
    } else if (number === 3) {
        document.querySelector(".modalClass").style.display = "none";
    }
}
