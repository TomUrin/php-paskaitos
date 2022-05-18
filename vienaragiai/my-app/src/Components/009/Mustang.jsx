function Mustang() {
const zxz = 33;
    return (
        <>
            <h2 style={
                {
                    color: 'pink',
                    backgroundColor: 'skyblue',
                    padding: zxz + 'px',
                }
            }>Mustangas</h2>
            <span>Laukinis žirgas Nr. {zxz > 40 ? 'jaja23' : 'no number'}</span>
        </>
    );
}

export default Mustang;