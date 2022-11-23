
      export const modalAlert = Swal.mixin({
        customClass: {
          confirmButton: "btn btn-success",
          cancelButton: "btn btn-danger",
          actions: "custome-actions",
        },
        buttonsStyling: false,
      });

 
 export function ConfigAlert(title,text="",icon="",html){
  return {
      title: title,
      text: text,
      icon: icon,
      html: html,
      showCancelButton: true,
      confirmButtonText: "Xác nhận",
      cancelButtonText: "Hủy bỏ",
      reverseButtons: true,
  };
 }


  export * from './alert.js';
