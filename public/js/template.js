function previewPic() {
  const picture = document.querySelector("#picture");
  const imgPreview = document.querySelector(".img-preview");

  const filepicture = new FileReader();
  filepicture.readAsDataURL(picture.files[0]);

  filepicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };
}
