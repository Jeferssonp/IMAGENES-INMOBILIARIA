const blobtobase64 = (blob) => {
return new Promise ((resolve, reject)=>{
    const reader = new filereader();
    reader.readAsDataURL(blob);
    reader.onloadend = ()=>{
        resolve(reader.result.split(',')[1]);

        //"data:image/jpg;base64, = adsffghgjhhk"
    };
});

};
const b64toblob = async (b64, type) =>{
    const blob = await fetch (`data:${type};base64,${b64}`);
return blob;
};
export
blobtobase64
b64toblob