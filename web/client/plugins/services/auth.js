export default function ({ $axios }, inject) {
  // Create a custom axios instance
  const api = $axios.create({
    crossDomain: true
  })
  if (process.client) {
    api.setBaseURL(`http://${window.location.hostname}:8011`)
  }


  // Inject to context as $api
  inject('authService', api)
}
