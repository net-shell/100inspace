import Alpine from 'alpinejs'
import FormsAlpinePlugin from '../../vendor/filament/forms/dist/module.esm'
import intersect from '@alpinejs/intersect'

Alpine.plugin(FormsAlpinePlugin)
Alpine.plugin(intersect)

window.Alpine = Alpine

Alpine.start()
