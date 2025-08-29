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


