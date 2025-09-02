class Graph:
    def __init__(self, size):
        self.matrix = [[0] * size for _ in range(size)]
        self.vertex = [''] * size
        self.size = size

    def add_vertex(self, index, data):
        if 0 <= index < self.size:
            self.vertex[index] = data
    
    def add_edge(self, row, column, weight):
        if 0 <= row < self.size and 0 <= column < self.size:
            self.matrix[row][column] = weight

    def print_graph(self):
        print("Adjacency Matrix:")
        for row in self.matrix:
            print(' '.join(map(lambda x: str(x) if x is not None else '0', row)))
        print("\nVertex Data:")
        for index, data in enumerate(self.vertex):
            print(f"Vertex {index}: {data}")

g = Graph(4)

g.add_vertex(0, 'A')
g.add_vertex(1, 'B')
g.add_vertex(2, 'C')
g.add_vertex(3, 'D')

g.add_edge(0, 1, 3) # A -> B
g.add_edge(0, 2, 2) # B -> C
g.add_edge(2, 1, 1) # C -> B
g.add_edge(3, 0, 4) # D -> A

g.print_graph()
