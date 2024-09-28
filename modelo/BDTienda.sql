
CREATE TABLE Empresa (
    codigo VARCHAR(50) PRIMARY KEY,
    nombre VARCHAR(100)
);

CREATE TABLE Persona (
    codigo VARCHAR(50) PRIMARY KEY,
    email VARCHAR(100),
    nombre VARCHAR(100),
    telefono VARCHAR(15)
);

CREATE TABLE Producto (
    codigo VARCHAR(50) PRIMARY KEY,
    nombre VARCHAR(100),
    stock INT,
    valorUnitario DOUBLE
);

CREATE TABLE Vendedor (
    codigo_persona VARCHAR(50),  -- Herencia de Persona
    carne INT,
    direccion VARCHAR(255),
    PRIMARY KEY (codigo_persona),
    FOREIGN KEY (codigo_persona) REFERENCES Persona(codigo)
);

CREATE TABLE Cliente (
    codigo_persona VARCHAR(50),  -- Herencia de Persona
    credito DOUBLE,
    codigo_empresa VARCHAR(50),  -- Relación con Empresa
    PRIMARY KEY (codigo_persona),
    FOREIGN KEY (codigo_persona) REFERENCES Persona(codigo),
    FOREIGN KEY (codigo_empresa) REFERENCES Empresa(codigo)
);

CREATE TABLE Factura (
    numero BIGINT PRIMARY KEY,
    fecha DATE,
    total DOUBLE,
    cliente_codigo_persona VARCHAR(50),
    vendedor_codigo_persona VARCHAR(50),
    FOREIGN KEY (cliente_codigo_persona) REFERENCES Cliente(codigo_persona),
    FOREIGN KEY (vendedor_codigo_persona) REFERENCES Vendedor(codigo_persona)
);

CREATE TABLE ProductosPorFactura (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cantidad INT,
    subtotal DOUBLE,
    factura_numero BIGINT,
    producto_codigo VARCHAR(50),
    FOREIGN KEY (factura_numero) REFERENCES Factura(numero),
    FOREIGN KEY (producto_codigo) REFERENCES Producto(codigo)
);