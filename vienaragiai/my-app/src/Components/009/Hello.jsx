function Hello({spalva, size, skaicius}) {
    return (
    <h1 style={
        {
            color: spalva,
            fontSize: size + 'px',
        }
    }>Hello {skaicius + 10}</h1>
    )
}

export default Hello;