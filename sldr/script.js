class Slider {
    constructor (rangeElement, valueElement, options) {
      this.rangeElement = rangeElement
      this.valueElement = valueElement
      this.options = options
  
      // Attach a listener to "change" event
      this.rangeElement.addEventListener('input', this.updateSlider.bind(this))
    }
  
    // Initialize the slider
    init() {
      this.rangeElement.setAttribute('min', options.min)
      this.rangeElement.setAttribute('max', options.max)
      this.rangeElement.value = options.cur
  
      this.updateSlider()
    }
  
    // Format the money
    asMoney(value) {
      return '$' + parseFloat(value)
        .toLocaleString('en-US', { maximumFractionDigits: 2 })
    }
  
    generateBackground(rangeElement) {   
      if (this.rangeElement.value === this.options.min) {
        return
      }
  
      let percentage =  (this.rangeElement.value - this.options.min) / (this.options.max - this.options.min) * 100
      return 'background: linear-gradient(to right, rgba(10,72,111,1), rgba(10,72,111,1) ' + percentage + '%, #0e669d ' + percentage + '%, #138cd7 100%)'
    }
  
    /*linear-gradient(90deg, rgba(10,72,111,1) 0%, rgba(10,72,111,1) 35%, rgba(0,212,255,1) 100%);*/

    updateSlider (newValue) {
      this.valueElement.innerHTML = this.asMoney(this.rangeElement.value)
      this.rangeElement.style = this.generateBackground(this.rangeElement.value)
    }
  }
  
  let rangeElement = document.querySelector('.range [type="range"]')
  let valueElement = document.querySelector('.range .range__value span') 
  
  let options = {
    min: 2000,
    max: 25000,
    cur: 7000
  }
  
  if (rangeElement) {
    let slider = new Slider(rangeElement, valueElement, options)
  
    slider.init()
  }