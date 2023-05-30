import i18n from 'i18n-js';
import { en, ar, fr } from '../../localizations'; // Import your translation files

// Set up i18n

i18n.fallbacks = true;
i18n.translations = { en, ar, fr };

export default i18n;