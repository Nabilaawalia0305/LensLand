function vehicleSelection() {
    const vehicleType = document.getElementById("tipe").value;
    const canonSelect = document.getElementById("canon");
    const sonySelect = document.getElementById("sony");

    if (vehicleType === "canon") {
      canonSelect.style.display = "block";
      sonySelect.style.display = "none";
    } else if (vehicleType === "sony") {
      sonySelect.style.display = "block";
      canonSelect.style.display = "none";
    } else {
      sonySelect.style.display = "none";
      canonSelect.style.display = "none";
    }
  }

  // Calculate the duration between start and end dates
  function calculateDuration() {
    const startDate = new Date(document.getElementById("dari").value);
    const endDate = new Date(document.getElementById("sampai").value);
    const diffInMilliseconds = endDate - startDate;
    const diffInDays = diffInMilliseconds / (1000 * 60 * 60 * 24);
    document.getElementById("hari").innerText = `${diffInDays} Hari`;
  }

  // Attach event listeners
  document.getElementById("tipe").addEventListener("change", vehicleSelection);
  document.getElementById("dari").addEventListener("change", calculateDuration);
  document.getElementById("sampai").addEventListener("change", calculateDuration);