function changeImage(image,number,color,cdid){
    console.log(number);
    document.getElementById('big-img').src=image;
    document.getElementById('numbers').innerText=number;

    let link = document.getElementById('bookingurl').href;
    let data = link.replace(link.split("?")[1],`cdid=${cdid}`);
    document.getElementById('bookingurl').href=data;
    
}

function calculatePrice()
{
    let start_date=document.getElementById("start_date").value;
    let end_date=document.getElementById("end_date").value;

    console.log(new Date(end_date)-new Date(start_date));
}