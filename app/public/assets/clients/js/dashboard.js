async function downloadCvAttach(resume_id){
    const params = new URLSearchParams();

    params.append('resume_id',resume_id);

    const cv=await axios.post('http://localhost//itjobs/jobseekers/myattach/data_resume',params)
    const config = { responseType: 'blob' };
    const filePdf=await axios.get(`http://localhost/itjobs/app/library/pdfjs/web/images/${cv.data.file_location}`,config)
    const data=await filePdf.data;
         var a = document.createElement('a');
        var url = window.URL.createObjectURL(data);
        a.href = url;
        a.download = `${cv.data.file_location}`;
        document.body.append(a);
        a.click();
        a.remove();
        window.URL.revokeObjectURL(url);
       
}