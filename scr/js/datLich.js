function ktDL(){
    const phoneNumberInput = document.querySelector('#phoneNumber');
    const licensePlateInput = document.querySelector('#licensePlate');
    const appointmentDateInput = document.querySelector('#appointmentDate').value;

    // Kiểm tra Số điện thoại đúng định dạng
    const phoneRegex = /^[0-9]{10,11}$/;
    if (!phoneRegex.test(phoneNumberInput.value)) {
        alert("Số điện thoại không hợp lệ. Vui lòng nhập từ 10 đến 11 chữ số.");
        return false;
    }

    // Kiểm tra Biển số xe đúng định dạng
    const licensePlateRegex = /^[0-9]{2}-[A-Z]{1,2}[0-9]{5}$/;
    if (!licensePlateRegex.test(licensePlateInput.value)) {
        alert("Biển số xe không hợp lệ. Vui lòng nhập đúng định dạng (VD: 84-A01234).");
        return false;
    }

    // Kiểm tra Ngày không được để trống và không được chọn ngày trong quá khứ
    const today = new Date();
    const todayString = today.toISOString().split('T')[0];
    if (appointmentDateInput.value < todayString) {
        alert("Ngày không được là ngày trong quá khứ.");
        return false;
    }
        
    return true;
}