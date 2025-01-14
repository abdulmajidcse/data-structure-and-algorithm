from typing import List
class Solution:
    def findMedianSortedArrays(self, nums1: List[int], nums2: List[int]) -> float:
        nums = nums1 + nums2
        nums.sort()
        n = len(nums)
        median_index = int(n / 2)
        if n % 2 == 0:
            median1 = nums[median_index - 1]
            median2 = nums[median_index]
            median = (median1 + median2) / 2
        else:
            median = nums[median_index]
        return median

sol = Solution()
print(sol.findMedianSortedArrays([1, 3], [2]))

"""
Given two sorted arrays nums1 and nums2 of size m and n respectively, return the median of the two sorted arrays. The overall run time complexity should be O(log (m+n)).
Solution Link: https://leetcode.com/problems/median-of-two-sorted-arrays/solutions/6096911/to-get-the-median-from-a-list-or-array/
"""