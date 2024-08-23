var overall = []
const sales = []
const production = []
async function fetchReports() {
    const data = await fetch('http://localhost/ci/assets/js/reportData.json');

    return data.json();
}

function mapCategories(report) {
    let category = report.category;
    switch (category) {
        case "overall":
            overall.push(report);
            break;
        case "sales":
            sales.push(report);
            break;

        case "production":
            production.push(report);
            break;
        default:
            break;
    }
}
fetchReports().then(data => {
    data.forEach(element => {
        mapCategories(element);
       
        
    });


});

setTimeout(() => {console.log(("timeout"));
},3000)
overall.forEach(report => {
  

    let container = document.getElementById("overall-market");

    let template = document.createElement("div");

    template.classList.add("col");
    template.innerHTML = `<div class="p-3 rounded position-relative overflow-hidden what_included_card ">
            <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="">
            <div class="text-start d-flex flex-column">
              <div class="d-flex align-items-center mb-2 gap-3">
                <img class="check-box me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                <div class="d-flex flex-column gap-3 ">
                  <h4 class="title"> ${report.category}</h4>
                  <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="">learn more</a>
                </div>
              </div>
            </div>
          </div>`;



    container.appendChild(template);



});

