function Hello({spalva, size}) {

    return (
        <h1 style={
            {
                color:spalva,
                fontSize: size + 3 + 'px'

            }
        }>Hello {}</h1>
    )
}

export default Hello;