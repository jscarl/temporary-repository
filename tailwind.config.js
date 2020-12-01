module.exports = {
    future: {
        // removeDeprecatedGapUtilities: true,
        // purgeLayersByDefault: true,
    },
    purge: [],
    theme: {
        fontFamily: {
            body: ['Montserrat', 'sans-serif']
        },
        truncate: {
            lines: {
                3: '3',
                5: '5',
                8: '8',
            }
        },
        minHeight: {
            '0': '0',
            '1/4': '25%',
            '1/2': '50%',
            '3/4': '75%',
            'full': '100%',
        },
        extend: {
            colors: {
                pri: {
                    100: '#005792',
                    200: '#53CDE2',
                    300: '#D1F4FA',
                },
                alt: {
                    100: '#37C7C2',
                    200: '#085F63',
                    300: '#49BEB7',
                }
            }
        }
    },
    variants: {},
    plugins:
        [
            require('tailwindcss-truncate-multiline')(['responsive', 'hover']),
            require('@tailwindcss/typography'),
        ],
}
