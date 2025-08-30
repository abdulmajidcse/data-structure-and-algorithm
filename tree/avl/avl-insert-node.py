class TreeNode:
    def __init__(self, data):
        self.data = data
        self.left = None
        self.right = None
        self.height = 1

def get_height(node):
    if not node:
        return 0
    return node.height

def get_balance(node):
    if not node:
        return 0
    return get_height(node.right) - get_height(node.left)

def left_rotate(node):
    print("Rotate left on node", node.data)

    rotate_node = node.right
    right_left_node = rotate_node.left
    rotate_node.left = node
    node.right = right_left_node

    node.height = 1 + max(get_height(node.left), get_height(node.right))
    rotate_node.height = 1 + max(get_height(rotate_node.left), get_height(rotate_node.right))
    
    return rotate_node

def right_rotate(node):
    print("Rotate right on node", node.data)

    rotate_node = node.left
    left_right_node = rotate_node.right
    rotate_node.right = node
    node.left = left_right_node

    node.height = 1 + max(get_height(node.left), get_height(node.right))
    rotate_node.height = 1 + max(get_height(rotate_node.left), get_height(rotate_node.right))
    
    return rotate_node

def insert(node, data):
    if not node:
        return TreeNode(data)

    if data < node.data:
        node.left = insert(node.left, data)
    elif data > node.data:
        node.right = insert(node.right, data)

    node.height = 1 + max(get_height(node.left), get_height(node.right))
    balance = get_balance(node)

    # Left-Left
    if balance < -1 and get_balance(node.left) <= 0:
        return right_rotate(node)
    
    # Left-Right
    if balance < -1 and get_balance(node.left) > 0:
        node.left = left_rotate(node.left)
        return right_rotate(node)
    
    # Right-Right
    if balance > 1 and get_balance(node.right) >= 0:
        return left_rotate(node)
    
    if balance > 1 and get_balance(node.right) < 0:
        node.right = right_rotate(node.right)
        return left_rotate(node)
    
    return node

def inOrderTraversal(node):
    if node is None:
        return
    inOrderTraversal(node.left)
    print(node.data, end=", ")
    inOrderTraversal(node.right)

# Inserting nodes
root = None
letters = [10, 8, 9, 5]
for letter in letters:
    root = insert(root, letter)

inOrderTraversal(root)
print()
