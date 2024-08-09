const readmoreBtn = document.querySelector('.read-more-btn');
const text = document.querySelector('.text');

readmoreBtn.addEventListener('click',(e)=>{
    text.classList.toggle('Show-More');
    if(readmoreBtn.innerText === 'Read More'){
        readmoreBtn.innerText = 'Read Less';
    }else{
        readmoreBtn.innerText = 'Read More';
    }
})