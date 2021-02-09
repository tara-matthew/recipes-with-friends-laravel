module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            minHeight: {
                '1/4': '25%',
            },
            height: {
                'without-header': 'calc(100% - 3rem)',
                'viewport-without-header': 'calc(100vh - 5rem)'
            }
        },
    },
    variants: {
        extend: {
            borderWidth: ['last'],
            margin: ['odd'],
        },
    },
    plugins: [],
}
