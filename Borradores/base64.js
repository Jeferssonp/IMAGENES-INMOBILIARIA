import{blobtobase64} from './blobmanager.js';

const btntoblob = document.querySelector('#btntoblob');
const videofile = document.querySelector('#videofile');
const imagenesfile = document.querySelector('#imagenesfile');




/* videofile.addEventListener('click' async (e) => {
    console.log(videofile.innerText);


    
});
imagenesfile.addEventListener('click' async (e) => {
    console.log(imagenesfile.innerText);



}); */

btntoblob.addEventListener('click' async (e) => {
    console.log(btntoblob.innerText);
    console.log('convirtiendo mi blob');
    const myblob = videofile.files[0];
    const myblob = imagenesfile.files[0];
    const myb64 = blobtobase64(myblob);
    console.log(myb64);



    
});