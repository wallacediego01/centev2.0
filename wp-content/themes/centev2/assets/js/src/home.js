import { Page } from './util/page';

// Import all components
import { Essentials } from './core/essentials';
import { Vitrine } from './components/vitrine';



// Initialize all components
new Page(
	Essentials.concat([
	// components..		
	Vitrine,
	
	])
);