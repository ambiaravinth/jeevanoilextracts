window.addEventListener('load',()=>{
    const params=(new URL(document.location)).searchParams;
    const mail=params.get('email');
    document.getElementById('resultans').innerHTML=mail;
})