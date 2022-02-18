// jQuery is imported externally

// Import all components
import { IE } from '../components/ie';
import { MobileMenu } from '../components/mobile-menu';
import { Header } from '../components/header';
import { DataBg } from '../components/data-bg';
import { LazyLoad } from '../components/lazy-load';
import { FiltroPost } from '../components/filtro-empresas';

// Export an array of essential components
export const Essentials = [
	IE,
	Header,
	MobileMenu,
	DataBg,
	LazyLoad, 
	FiltroPost
];
