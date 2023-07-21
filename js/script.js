    const form1 = document.querySelector("form1");
    const fileInput = document.querySelector(".file-input");
    const progressArea = document.querySelector(".progress-area");
    const uploadedArea = document.querySelector(".uploaded-area");

    // form click event
    form1.addEventListener("click", () => {
      fileInput.click();
    });

    fileInput.onchange = ({ target }) => {
      let file = target.files[0]; //getting file [0] this means if user has selected multiple files then get first one only
      if (file) {
        let fileName = file.name; //getting file name
        if (fileName.length >= 12) { //if file name length is greater than 12 then split it and add ...
          let splitName = fileName.split('.');
          fileName = splitName[0].substring(0, 13) + "... ." + splitName[1];
        }
        uploadFile(fileName); //calling uploadFile with passing file name as an argument
      }
    };

    // file upload function
    function uploadFile(name) {
      let xhr = new XMLHttpRequest(); //creating new xhr object (AJAX)
      xhr.open("POST", "index.php"); //sending post request to the specified URL (index.php for file upload)
      xhr.upload.addEventListener("progress", ({ loaded, total }) => { //file uploading progress event
        let fileLoaded = Math.floor((loaded / total) * 100);  //getting percentage of loaded file size
        let fileTotal = Math.floor(total / 1000); //gettting total file size in KB from bytes
        let fileSize;
        uploadedArea.classList.add("onprogress");
        if (loaded == total) {
          progressArea.innerHTML = "";
          let uploadedHTML = `<li class="row">
                                <div class="content upload">
                                  <div>
                                    <span class="name">${name} Uploaded</span>
                                  </div>
                                </div>
                                <img src="img/check.png" style="width:20%">
                              </li>`;
          uploadedArea.classList.remove("onprogress");
          uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML);
        }
      });
      let data = new FormData(form1); //FormData is an object to easily send form data
      xhr.send(data); //sending form data
    }