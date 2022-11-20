
      export const modalAlert = Swal.mixin({
          customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger",
            actions: "custome-actions",
          },
          buttonsStyling: false,
        });
  
   
   export function ConfigAlert(text){
    const configAlert = {
        title: "Cảnh báo",
        text: text,
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Đồng ý",
        cancelButtonText: "Hủy bỏ",
        reverseButtons: true,
    };
   }

  
    export * from './Notification.js';
