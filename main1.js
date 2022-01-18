const readMorebtn = document.querySelector('.read-more-btn');
const text = document.querySelector('.text');

readMorebtn.addEventListener('click',(e)=>{
    text.classList.toggle('show-more');

    if(readMorebtn.innerText === 'Read More'){
        readMorebtn.innerText='Read Less';
    }else{
        readMorebtn.innerText='Read Less';

    }
    
} )