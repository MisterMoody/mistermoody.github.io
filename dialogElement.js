/* Normal & Modal DIALOG: "ENTER-TEXT" */
(function() {
  //Page Elements
  var dialogWindow = document.getElementById('dialogWindow');
  var openDialogText = document.getElementById('openDialogText');
  var openModalDialogText = document.getElementById('openModalDialogText');
  
  //Event Listener for Dialog: Enter Text (Button)
    // The '.show' Function will open a Small-Box Widow
  openDialogText.addEventListener('click', function(){
    dialogWindow.show()
  });
  //Event Listener to Open Modal Dialog Window (Button)
    // The '.showModal' Function will open a Full-Page Overlay
  openModalDialogText.addEventListener('click', function(){
    dialogWindow.showModal()
  });
  

})();

/* Normal & Modal DIALOG: "MAKE-a-CHOICE" */
(function() {
	//Page Elements
  var updateButton = document.getElementById('updateDetails');
  var openDialogChoice = document.getElementById('openDialogChoice');
  
  // Event Listener that will OPEN the Dialog
  updateButton.addEventListener('click', function() {
    openDialogChoice.show();
  });

  // Event Listener that will CLOSE the Dialog
  cancelButton.addEventListener('click', function() {
    openModalDialogChoice.close();
  });
})();