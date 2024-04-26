const faqs = document.querySelectorAll(".faq");

const newFaqs = Array.from(faqs);
newFaqs.forEach(faq =>{
faq.addEventListener("click",()=> {
    faq.classList.toggle("active");
    let num = newFaqs.indexOf(faq);
    console.log(num);
    faqs.forEach(faq=>{
        if(faq.classList.contains("active")&&newFaqs.indexOf(faq)==num){
            console.log("hey");
        }
        else{
            faq.classList.remove("active");
        }
    })
})
} )